<?php
    namespace App\Controllers;

    use App\Models\Student;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
  

    class StudentController
    {   
        
        public function index() {
            $students = Student::get();
            return view("index", ["students" => $students]);
        }

        #create section starts
        public function create() {
            return view("create");
        }

        public function store(Request $request) {
            $student = Student::create($request->request->all());
            if ($student) return redirect("/students");
        }
        #create section ends

        #Read section
        public function show($id) {
            $student = Student::find($id);
            return view("show", ['student' => $student]);
        }
        #Update section starts
        #->Edit section
        public function edit($id) {
            $student = Student::find($id);
            return view("edit", ['student' => $student]);
        }
        
        public function update(Request $request) {
            $student = Student::where('id', $request->request->get('id'))->update($request->request->all());
            if ($student) return redirect("/student/{$request->request->get('id')}");
        }
        #update section ends

        #Destroy section
        public function destroy($id) {
            $statement = Student::destroy($id);

            if($statement) return redirect("/students");
        }

    }

?>
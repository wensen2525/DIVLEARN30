<x-layouts>
    <a href="{{ route('student.create') }}" class="btn btn-primary">Create Student</a>
    <table class="table">
        <thead>
        {{-- @foreach ($students as $student) --}}
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">NIM</th>
            <th scope="col">Major</th>
            <th scope="col">Submission Title</th>
            <th scope="col">Submission Image</th>
            <th scope="col">:</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $index => $student)
        <tr>
            <th scope="row">{{$index + 1}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->nim}}</td>
            <td>{{$student->major}}</td>
            <td>{{isset($student->submission->title) ? $student->submission->title : "NULL"}}</td>
            <td>{{isset($student->submission->image_file) ? $student->submission->image_file : "NULL"}}</td>
            <td>
              <div class="d-flex gap-3">
                <a href="{{ route('student.edit', $student) }}" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                <form action="{{ route('student.destroy', $student) }}" method="post" enctype="multipart/form-data">
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="bi bi-trash3-fill"></i></button>
                  @csrf
                </form>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</x-layouts>

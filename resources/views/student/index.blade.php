<x-layouts>
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
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->nim}}</td>
            <td>{{$student->major}}</td>
            <td>{{$student->submission->title}}</td>
            <td>{{$student->submission->image_file}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
</x-layouts>

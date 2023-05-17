<x-layouts>
      <form method="POST" action="{{ route('student.update', $student) }}" enctype="multipart/form-data" class="p-3">
            @csrf
            @method('UPDATE')

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" name="nim" value="{{ $student->nim }}">
            </div>
            <div class="mb-3">
                  <label for="major" class="form-label">Major</label>
                  <input type="text" class="form-control" name="major" value="{{ $student->major }}">
            </div>

            @method('PUT')
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layouts>
<x-layouts>
      <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data" class="p-3">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" name="nim">
            </div>
            <div class="mb-3">
                  <label for="major" class="form-label">Major</label>
                  <input type="text" class="form-control" name="major">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-layouts>
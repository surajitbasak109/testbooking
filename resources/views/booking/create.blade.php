<x-app>
  <div class="container">
    <form action="{{ route('booking.store') }}" method="POST">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-9">
              <h3 class="card-title">Booking</h3>
            </div>
            <div class="col-lg-3 text-end">
              <button type="submit" class="btn btn-sm btn-success">Save</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="row mb-3">
                <label for="name" class="col-form-label-sm col-lg-2">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control form-control-sm" name="name" id="name" required>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row mb-3">
                <label for="phone" class="col-form-label-sm col-lg-2">Phone No</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control form-control-sm" name="phone" id="phone" required>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row mb-3">
                <label for="email" class="col-form-label-sm col-lg-2">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control form-control-sm" name="email" id="email" required>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row mb-3">
                <label for="address" class="col-form-label-sm col-lg-2">Address</label>
                <div class="col-lg-10">
                  <textarea name="address" id="address" class="form-control form-control-sm no-resize"
                    rows="1"></textarea>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</x-app>
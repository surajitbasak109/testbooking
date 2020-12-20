<x-app>
  @push('appconfig')
  <script>
    let app = {
    rooms: [
      { room_no: 101 },
      { room_no: 102 },
      { room_no: 103 },
      { room_no: 104 },
      { room_no: 105 },
      { room_no: 106 },
      { room_no: 107 },
      { room_no: 108 },
      { room_no: 109 },
      { room_no: 110 },
      { room_no: 111 },
    ]
  }
  </script>
  @endpush
  <div class="container-fluid">
    <form action="{{ route('booking.store') }}" method="POST">
      {{-- start card --}}
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-9">
              <h3 class="card-title">Customer Detail</h3>
            </div>
            <div class="col-lg-3 text-end">
              <button type="submit" class="btn btn-sm btn-success">Save</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="row mb-3">
                <label for="firstname" class="col-form-label-sm col-lg-4">FirstName</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" required>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row mb-3">
                <label for="lastname" class="col-form-label-sm col-lg-4">Lastname</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control form-control-sm" name="lastname" id="lastname" required>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row mb-3">
                <label for="phone" class="col-form-label-sm col-lg-4">Phone No</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control form-control-sm" name="phone" id="phone" required>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row mb-3">
                <label for="email" class="col-form-label-sm col-lg-4">Email</label>
                <div class="col-lg-8">
                  <input type="text" class="form-control form-control-sm" name="email" id="email" required>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row mb-3">
                <label for="address" class="col-form-label-sm col-lg-2">Address</label>
                <div class="col-lg-10">
                  <textarea name="address" id="address" class="form-control form-control-sm no-resize"
                    rows="1"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- end card --}}

      {{-- start card --}}
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title">Item Detail</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive s_table">
            <table class="table booking-items-table items mt-0">
              <thead>
                <tr>
                  <th width="20%">Room no</th>
                  <th width="30%">Guest Name</th>
                  <th width="20%">Relationship</th>
                  <th width="15%">Pax</th>
                  <th width="10%">Actual Rent</th>
                  <th width="10%">Total Rent</th>
                  <th class="text-center" width="15%">
                    <i class="fa fa-cog"></i>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select id="room_no" class="form-select form-select-sm">
                      <option value="">Select room</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" id="guest_name" class="form-control form-control-sm">
                  </td>
                  <td>
                    <select id="relation" class="form-select form-select-sm">
                      <option value="">Select Relationship</option>
                      <option value="Father">Father</option>
                      <option value="Uncle">Uncle</option>
                      <option value="Mother">Mother</option>
                      <option value="Wife">Wife</option>
                      <option value="Son">Son</option>
                      <option value="Daughter">Daughter</option>
                      <option value="Brother">Brother</option>
                      <option value="Sister">Sister</option>
                      <option value="Other">Other</option>
                    </select>
                  </td>
                  <td>
                    <input type="number" id="pax" value="1" class="form-control form-control-sm text-end">
                  </td>
                  <td>
                    <input type="number" id="rent" value="0.00" class="form-control form-control-sm text-end">
                  </td>
                  <td>
                    <input type="number" id="tot_rent" value="0.00" class="form-control form-control-sm text-end"
                      readonly>
                  </td>
                  <td class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" id="add_item">
                      <i class="fa fa-check"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{-- end card --}}
    </form>
  </div>
  {{-- end container --}}

  @push('js')
  <script src="{{ asset('js/booking.js') }}"></script>
  @endpush
</x-app>

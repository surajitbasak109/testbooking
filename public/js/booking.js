;(function () {
  renderRoomOpts()
  $('#add_item').on('click', function () {
    addItemToTable()
  })
})()

function renderRoomOpts() {
  let room_elm = app.rooms.map(el => `<option value="${el.room_no}">${el.room_no}</option>`).join('')
  $('#room_no').append(room_elm)
}

function addItemToTable(data, itemid) {
  data = typeof data == 'undefined' || data == 'undefined' ? getItemPreviewValues() : data
  let tableRow = ''
  let itemKey = $('booking-items-table').find('tbody .item').length + 1

  tableRow += `<tr class="sortable item">`;

  // check is pax is number
  data.pax = isNaN(data.pax) ? 1 : data.pax
  data.rent = isNaN(data.rent) ? 0 : data.rent

  let tot_rent = data.pax * data.rent
  tableRow += `<td>
    <input type="text" name="newitems[${itemKey}][room_no]" class="form-control form-control-sm" value="${data.room_no}">
  </td>
  <td>
    <input type="text" name="newitems[${itemKey}][guest_name]" class="form-control form-control-sm" value="${data.guest_name}">
  </td>
  <td>
    <input type="text" name="newitems[${itemKey}][relation]" class="form-control form-control-sm" value="${data.relation}">
  </td>
  <td>
    <input type="number" name="newitems[${itemKey}][pax]" class="form-control form-control-sm text-end" value="${data.pax}">
  </td>
  <td>
    <input type="number" name="newitems[${itemKey}][rent]" class="form-control form-control-sm text-end" value="${parseFloat(data.rent).toFixed(2)}">
  </td>
  <td>
    <input type="number" name="newitems[${itemKey}][tot_rent]" class="form-control form-control-sm text-end" value="${parseFloat(tot_rent).toFixed(2)}" readonly>
  </td>`

  tableRow += `</tr>`;

  $('table.items tbody').append(tableRow)

  $(document).trigger({
    type: "item-added-to-table",
    data,
    row: tableRow
  })

  emptyBookingItem()
}

function getItemPreviewValues() {
  const response = {}
  response.room_no = $('#room_no').val()
  response.guest_name = $('#guest_name').val()
  response.relation = $('#relation').val()
  response.pax = $('#pax').val()
  response.rent = $('#rent').val()
  response.tot_rent = $('#tot_rent').val()

  return response
}

function emptyBookingItem() {
  $('#room_no').val('').trigger('change')
  $('#guest_name').val('')
  $('#relation').val('')
  $('#pax').val('')
  $('#rent').val('')
  $('#tot_rent').val('')
}

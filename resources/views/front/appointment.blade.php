<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{ url('appointment')}}" method="post" enctype="multipart/form">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="name" placeholder="Full name">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="date"  name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
            <option value="">Select</option>
            @foreach($data as $categories)
                            <option  value="{{ $categories->id }}">
                                {{ ucfirst($categories->name) }}</option>
                            @endforeach
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor_id" id="doctor_id" class="custom-select">
            <option value="">Select Departement</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <input type="text" class="form-control" name="email" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control"  name="phone" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6"
              placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->



<script>
  $(document).ready(function(){
    $('#departement').on('change', function () {
                let id = $(this).val();
                $('#doctor_id').empty();
                $('#doctor_id').append(`<option value="0" disabled selected>Processing...</option>`);

                $.ajax({
                type: 'GET',
                url: 'GetDoctorSpecialistsId/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#doctor_id').empty();
                $('#doctor_id').append(`<option value="0" disabled selected>Select Doctor*</option>`);
                response.forEach(element => {
                    $('#doctor_id').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
              });
  });

  </script>



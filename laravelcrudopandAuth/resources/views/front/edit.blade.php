<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>index Page</title>
  </head>
  <body>
    <div class="container mt-5">
        <form  action="{{ Route('data', ['id'=>$data->id]) }}"   method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"  value="{{ $data->name }}" placeholder="Enter Your Name" aria-describedby="emailHelp">
    @error('name')
          <span class="text-danger">{{ $message }}</span>
      @enderror
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number</label>
    <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ $data->number}}" placeholder="Enter Your Number" aria-describedby="emailHelp">
    @error('number')
          <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{$data->email}}" placeholder="Enter Your Email Address" aria-describedby="emailHelp">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
        @endif
  </div>

  <div class="mb-3">
  <label for="exampleInputEmail1"  class="form-label">Select City</label>
  <select class="form-select @error('citys') is-invalid @enderror" name="citys" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="vrundavan"<?php if ($data->citys == 'vrundavan') {echo "selected='selected'";} ?>>Vrundavan</option>
  <option value="somnath"<?php if ($data->citys == 'somnath') {echo "selected='selected'";} ?>>Somnath</option>
  <option value="kedarnath"<?php if ($data->citys == 'kedarnath') {echo "selected='selected'";} ?>>Kedarnath</option>
</select>
@error('citys')
                <span class="text-danger">{{ $message }}</span>
                @endif
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Image</label>
    <input type="file" name="image" class="form-control">

    <?php if (!empty($data->image)): ?>
        <p>Current image:</p>
        <img style="height: 50px; width: 50px;" src="{{ asset('userimages/' . $data->image) }}" alt="Current Image">
    <?php endif; ?>
</div>

<div class="mb-3">
<div class="form-check @error('gender') is-invalid @enderror">
  <input class="form-check-input" type="radio" value="male"<?php if ($data->gender == 'male') { echo "checked='checked'";} ?> name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="female"<?php if ($data->gender == 'female') { echo "checked='checked'";} ?> name="gender" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
@error('gender')
        <span class="text-danger">{{ $message }}</span>
        @endif
  </div>

                    <?php
                        $a = $data->hobby;
                        $b = explode(",",$a);
                        ?>

    <div class="mb-3 @error('hobby') is-invalid @enderror">
    <div class="form-check form-check-inline">
       <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox1" value="coding" <?php if(in_array("coding", $b)) { echo "checked='checked'"; } ?>>
       <label class="form-check-label" for="inlineCheckbox1">coding</label>
    </div>
    <div class="form-check form-check-inline">
       <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox2" value="game"<?php if(in_array("game", $b)) { echo "checked='checked'"; } ?><?php if(in_array("Coding", $b)) { echo "checked='checked'"; } ?>>
       <label class="form-check-label" for="inlineCheckbox2">game</label>
    </div>
    <div class="form-check form-check-inline">
       <input class="form-check-input" type="checkbox" name="hobby[]" id="inlineCheckbox3" value="reading"<?php if(in_array("reading", $b)) { echo "checked='checked'"; } ?>>
       <label class="form-check-label" for="inlineCheckbox3">reading</label>
    </div>
    @error('hobby')
                    <span class="text-danger">{{ $message }}</span>
                    @endif
    </div>
    <div class="form-group mb-3">
                <select id="country-dropdown" name="country" class="form-control">
                <option value="">-- Select Country --</option>
                @foreach ($CountryData as $Cou)
                    <option value="{{ $Cou->id }}" {{ $Cou->id == $selectedCountryId ? 'selected' : '' }}>{{ $Cou->name }}</option>
                @endforeach
            </select>
    </div>
                    <div class="form-group mb-3">
                    <select id="state-dropdown" name="state" class="form-control">
                    @foreach ($stateData as $State)
                        <option value="{{ $State->id }}" {{ $State->id == $selectedStateId ? 'selected' : '' }}>{{ $State->name }}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group mb-3">
                        <select id="city-dropdown" name="city" class="form-control">
                    @foreach ($cityData as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $selectedCityId ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                    </div>

  <div class="mb-3">
     <input type="submit" name="submit" class="btn btn-success">
  </div>
        </form>

    </div>
    <script>
        $(document).ready(function () {
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });

            $('#state-dropdown').on('change', function () {
                var idState = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

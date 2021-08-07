<section id="online-registration">
    <div class="container">
        <form method="post" action="{{ route('OnlineRegistration') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <input type="text" name="first_name" class="form-control form-control-sm" id="validationServer01"
                        placeholder="First Name" value="{{ old('first_name') }}">

                    @error('first_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="last_name" class="form-control form-control-sm" id="validationServer02"
                        placeholder="Last Name" value="{{ old('last_name') }}">

                    @error('last_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="phone_number" class="form-control form-control-sm" id="validationServer02"
                        placeholder="Phone Number" value="{{ old('phone_number') }}">

                    @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <select class="form-control form-control-sm" name="gender" value="{{ old('gender') }}">
                        <option selected disabled>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="text" name="user_identification" class="form-control form-control-sm" id="validationServer04" placeholder="National/Passport No"
                        value="{{ old('user_identification') }}">
                        @error('user_identification')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <input type="email" name="user_email" class="form-control form-control-sm" id="validationServer05" placeholder="E-mail (Optional)" value="{{ old('user_email') }}">
                    @error('user_email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <select class="form-control form-control-sm" name="course_selection"
                        value="{{ old('course_selection') }}">
                        <option selected disabled>Select Course</option>
                        <option value="1">Category A2</option>
                        <option value="2">Category B2 <span class="font-weight-bold">Light</span></option>
                        <option value="3">Category B3 <span class="font-weight-bold">Professional</span></option>
                        <option value="4">Category C1 <span class="font-weight-bold">Light Trucks</span></option>
                        <option value="5">Category D1 <span class="font-weight-bold">Vans</span></option>
                        <option value="6">Refresher Course</option>
                    </select>
                    @error('course_selection')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <select class="form-control form-control-sm" name="course_branch"
                        value="{{ old('course_branch') }}">
                        <option selected disabled>Select Branch</option>
                        <option value="1" class="text-capitalize">Jamii Villas, Ayany Kibera Drive (H/Office)</option>
                        <option value="2" class="text-capitalize">Arcade Discounts Ngong Road (Adams Arcade)</option>
                        <option value="3" class="text-capitalize">Kawangware 56</option>
                    </select>
                    @error('course_branch')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck3">
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" id="button1" type="submit">Submit</button>
        </form>
    </div>
</section>

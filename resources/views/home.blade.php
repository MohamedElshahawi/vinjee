<div class="row justify-content-md-center gutters">
    <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12">
        {{-- {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!} --}}

        @csrf
        <div class="form-block">
                <div class="form-block-header">
                    <h5>Create New User</h5>
                    <h6>Lorem ipsum fill all fields</h6>
                </div>
                <div class="form-block-body">

                            <!-- User Name-->
                    <div class="form-group row gutters">
                        <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
                        <div class="col-sm-9">

                        <input id="name" type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                            @error('name')
                            <span class="mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                            <!-- Email Address -->
                    <div class="form-group row gutters">
                        <label for="email" class="col-sm-3 col-form-label text-right">Email</label>
                        <div class="col-sm-9">
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autocomplete="username" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row gutters">
                        <label for="password" class="col-sm-3 col-form-label text-right">Password</label>
                        <div class="col-sm-9">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>




                    <div class="form-group row gutters">
                        <label for="password_confirmation" class="col-sm-3 col-form-label text-right">Confirm Password</label>
                        <div class="col-sm-9">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required autocomplete="new-password" />
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12"  style="margin-left: 290px">
                        <div class="form-group row gutters">
                            <p><code>Role:</code></p>
                            <select class="form-control selectpicker" multiple>
                                @foreach($roles as $role)
                                    <option>{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group row gutters">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">Create</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- {!! Form::close() !!} --}}
        </div>
</div>

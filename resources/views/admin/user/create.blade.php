<div class="container">
    <header class="header">
        <h3 id="title" class="text-left ml-4 mr-4">Add School User</h3>

    </header>
    <div class="form-wrap col-sm-9 m-4">    
    

    <form method="post" action="{{route('schools-users.store')}}" autocomplete="off"
      enctype="multipart/form-data">
      @csrf
      @method('post')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name" class="form-control" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label id="email-label" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label id="email-label" for="password">Password</label>
                        <input type="password" name="password" id="email" placeholder="Enter password" class="form-control" required>
                    </div>
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Role</label>
                        <select id="dropdown" name="role" class="form-control" required>
                          <option disabled selected value>Select</option>
                           @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Schools</label>
                        <select  name="school" class="form-control" required>
                          <option disabled selected value>Select</option>
                           @foreach($schools as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
            </div>
            </div>


            
            <div class="row">
                <div class="col-md-4 mb-5">
                    <button type="submit" id="submit" class="btn btn-primary btn-block ml-5">Add User</button>
                </div>
            </div>

        </form>
    </div>  
</div>
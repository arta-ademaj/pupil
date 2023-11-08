<div class="container">
    <header class="header">
        <h3 id="title" class="text-left ml-4 mr-4">Add User</h3>

    </header>
    <div class="form-wrap col-sm-9 m-4">    
    

    <form method="post" action="{{ route('schools.store')}}" autocomplete="off"
      enctype="multipart/form-data">
      @csrf
      @method('post')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="name">School Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="Enter address" class="form-control" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="country">Country</label>
                        <input type="text" name="country" id="country" placeholder="Country" class="form-control" required>
                    </div>
                </div>

                <h3>ADD School User</h3>

                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="name">School Admin Name</label>
                        <input type="text" name="user-name" id="name" placeholder="Enter name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="address">Email</label>
                        <input type="text" name="user-email" id="address" placeholder="Enter address" class="form-control" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="country">Password</label>
                        <input type="password" name="user-password" id="country" placeholder="Country" class="form-control" required>
                    </div>
                </div>



            </div>
            
      
            </div>


            
            <div class="row">
                <div class="col-md-4 mb-5">
                    <button type="submit" id="submit" class="btn btn-primary btn-block ml-5">Add School</button>
                </div>
            </div>

        </form>
    </div>  
</div>
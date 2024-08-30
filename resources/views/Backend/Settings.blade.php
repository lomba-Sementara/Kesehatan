@extends('Backend.dashboard')

    @section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Account</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
      </li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Profile Details</h5>
      <!-- Account -->
      
      <hr class="my-0" />
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input
                class="form-control"
                type="text"
                id="firstName"
                name="firstName"
                value="nama"
                autofocus
              />
            </div>
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label">Password</label>
              <input class="form-control" type="text" name="lastName" id="lastName" value="........." />
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input
                class="form-control"
                type="text"
                id="email"
                name="email"
                value="ContohEmail@example.com"
                placeholder="ContohEmail@example.com"
              />
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
    
  </div>
</div>
@stop
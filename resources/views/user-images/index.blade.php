@extends('layouts.admin.app')

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          <div class="table-responsive">
            <table id="datatable" class="table">
              <thead class="mobileHide">
                <tr>
                  <th>No</th>
                  <th>User</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th width="280px">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($images as $key => $image)
                  <tr class="flexTbl">
                    <td><span class="mobileShow">No. :</span> {{ ++$key }}</td>
                    <td><span class="mobileShow">User :</span> {{ $image->user->name }}</td>
                    <td>
                      <span class="mobileShow">Image :</span>
                      @if($image->image)
                        <img src="{{ asset('storage/' . $image->image) }}" 
                             alt="User Image" 
                             class="img-thumbnail" 
                             style="max-width: 100px; height: auto;">
                      @else
                        <span class="text-muted">No image</span>
                      @endif
                    </td>
                    <td>
                      <span class="mobileShow">Status :</span>
                      @if($image->status)
                        <span class="badge bg-success">Active</span>
                      @else
                        <span class="badge bg-danger">Inactive</span>
                      @endif
                    </td>
                    <td>
                      <div class="ThreeBtns">
                        <a href="{{ route('user-images.show', $image->id) }}">
                          <i class="btn btn-outline-success btn-sm bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('user-images.edit', $image->id) }}">
                          <i class="bi bi-pencil-square btn btn-outline-primary btn-sm"></i>
                        </a>
                        <form action="{{ route('user-images.destroy', $image->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?')">
                            <i class="bi bi-trash"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
$(document).ready(function() {
  var table = $('#datatable').DataTable({
    dom: 'Bfrtip',
    pageLength: 10,
    buttons: [
      {
        text: '<img src="{{asset('admin')}}/img/plus-icon.png" class="iconbt img-fluid" alt="plus icon"> Add New',
        className: 'btn-add-order greenBtn',
        action: function(e, dt, node, config) {
          window.location.href = "{{ route('user-images.create', ['user_id' => request('user_id')]) }}";
        }
      }
    ],
    language: {
      search: " ",
      searchPlaceholder: "Search"
    }
  });
});
</script>

<style>
  .ThreeBtns {
    display: flex;
    gap: 5px;
  }
  .btn-sm {
    padding: 0.25rem 0.5rem;
  }
  .bi {
    font-size: 0.875rem;
  }
  .img-thumbnail {
    transition: transform 0.3s ease;
    object-fit: cover;
  }
  .img-thumbnail:hover {
    transform: scale(1.1);
  }
  .mobileShow {
    display: none;
  }
  @media screen and (max-width: 768px) {
    .mobileShow {
      display: inline;
      font-weight: bold;
    }
    .mobileHide {
      display: none;
    }
    .flexTbl {
      display: flex;
      flex-direction: column;
      border: 1px solid #ddd;
      margin-bottom: 10px;
      padding: 10px;
    }
    .flexTbl td {
      border: none;
      padding: 5px 0;
    }
  }
  /* Add button styles */
  .btn-add-order {
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 5px;
  }
  .btn-add-order:hover {
    background-color: #218838;
    color: white;
  }
  .iconbt {
    width: 20px;
    height: 20px;
  }
  .greenBtn {
    background-color: #28a745 !important;
  }
  .greenBtn:hover {
    background-color: #218838 !important;
  }
  /* DataTables styles */
  .dt-buttons {
    float: right;
  }
  .dataTables_filter {
    text-align: left !important;
  }
  .dataTables_filter input {
    background-color: red;
    color: white;
    border: none;
    padding: 5px;
    border-radius: 4px;
    padding-left: 30px;
    background-image: url('https://cdn-icons-png.flaticon.com/512/622/622669.png');
    background-size: 20px;
    background-position: 5px center;
    background-repeat: no-repeat;
  }
  .dataTables_filter input:focus {
    outline: none;
    background-color: darkred;
  }
</style>
@endsection 
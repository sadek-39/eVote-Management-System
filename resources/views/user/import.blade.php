@php
    $response=session('response');
@endphp
@include('layout.page-head')
@include('layout.page-header')
@include('layout.page-sidebar')
<main id="dashboard">
    <div class="container-fluid">
        <h3 class="fs-3 fw-normal mb-4">Import Voter Data</h3>
        <div class="row">
            <div class="col-xxl-6 col-xl-8">
                @if (isset($response))
                    <div class="alert alert-success" role="alert">
                        <p class="mb-0">{{$response}}</p>
                    </div>
                    <script type="text/javascript"> 
                        setTimeout(() => {
                                      $('.alert').slideUp(function(){
                                          $(this).remove();
                                       });
                           }, 2000);
                       </script> 
                @endif
                <form action="{{route('importexport.import')}}" method="post" class="import-voter-data p-4 is-drop-shadow bg-white rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="upload-file" class="label text-center p-4 py-2 d-block border rounded">
                            <i class="bi bi-cloud-upload display-5"></i>
                            <p class="title text-muted fw-normal"> <var><strong>Browse</strong> file (.xl , .csv)</var></p>
                            <input type="file" name="file"  class="form-control d-none" id="upload-file" />
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary text-light px-4 rounded mt-3">
                        <i class="bi bi-check2-circle"></i>
                        Import Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

@include('layout.page-tail')
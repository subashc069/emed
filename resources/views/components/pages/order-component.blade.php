<section class="order-section">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel order-panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center text-dark">eMED Order Now</h3>
                        </div>
                    </div>
                    <form method="post" action="{{ route('frontend.order.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" name="contact" class="form-control" placeholder="Mobile no" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-md btn-primary mt-10 pull-right add-more-content"><i class="icon-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="description-content">
                                <div class="row description-content-file" data-index="0">
                                    <div class="col-md-6">
                                        <label>Description</label>
                                        <textarea class="form-control" placeholder="Description" name="prescription[0][description]" rows="4" cols="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="button-wrapper">
                                                  <span class="label">
                                                    Upload File
                                                  </span>
                                                    <input type="file" name="prescription[0][image]" id="upload" class="upload-box-0" data-index="0" placeholder="Upload File">
                                                    <span class="custom-file-name-0"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="height: 150px; width: 150px;">
                                                <img class="no-img-0" data-index="0" src="{{ asset('assets/images/no-image/no-img.jpg') }}" height="150" style="margin-top: 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success mt-10">Submit</button>
                        </div>
                    </form>         
                </div>
            </div>
        </div>
    </div>
</section>


@section('scripts')
    <script type="text/javascript">
        $(document).on('click', '.add-more-content', function(e) {
            e.preventDefault();
            if($(this).parents('.content').find('.description-content-file').last().length > 0) {
                var count   = $(this).parents('.content').find('.description-content-file').last().data('index') + 1;

            }
            else {
                var count = 1;
            }


            var content =   '<div class="essential-minus-content">'+
                                '<div class="row">'+
                                    '<div class="col-md-12">'+
                                        '<button class="btn btn-md btn-danger mt-10 pull-right minus-content"><i class="icon-circle-minus"></i></button>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="row description-content-file" data-index="'+ count +'">'+
                                    '<div class="col-md-6">'+
                                        '<label>Description</label>'+
                                        '<textarea class="form-control" placeholder="Description" name="prescription['+ count +'][description]" rows="4" cols="3"></textarea>'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                        '<div class="row">'+
                                            '<div class="col-md-6">'+
                                                '<div class="button-wrapper">'+
                                                  '<span class="label">'+
                                                    'Upload File'+
                                                  '</span>'+
                                                    '<input type="file" name="prescription['+ count +'][image]" id="upload" class="upload-box-'+count+'"data-index="'+count+'" placeholder="Upload File">'+
                                                     '<span class="custom-file-name-'+count+'"></span>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-md-6" style="height: 150px; width: 150px;">'+
                                                '<img class="no-img-'+count+'" data-index="'+count+'" src="{{ asset("assets/images/no-image/no-img.jpg") }}" height="150" style="margin-top: 10px;">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

            $('.description-content').append(content);
        });

        $(document).on('click', '.minus-content', function(e) {
            e.preventDefault();
            $(this).parents('.essential-minus-content').remove();
        });

        $(document).on('change','#upload', function(e) {
            e.preventDefault();

            // readUrl(this);
            var index = $(this).data('index');


            if (this.files && this.files[0]) {   
                var reader      = new FileReader();
                var filename    = $(".upload-box-"+index).val();
                    filename    = filename.substring(filename.lastIndexOf('\\')+1);
                    
                reader.onload = function(e) {
                  // debugger;      
                  $('.no-img-'+index).attr('src', e.target.result);
                  $('.no-img-'+index).hide();
                  $('.no-img-'+index).fadeIn(500);      
                  $('.custom-file-name-'+index).text(filename);             
                }
                reader.readAsDataURL(this.files[0]);    
              } 
        });
    </script>
@endsection

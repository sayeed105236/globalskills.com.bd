<div class="modal fade" id="mockTestEdit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="mockTestEdit"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mockTestEdit">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('update-mock') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <input type="hidden" name="old_img" value="{{ $category->image }}">

                    <div class="form-group">
                        <label for="classroom_course_title">Mocktest Category</label>
                        <input data-validation="required" type="text" class="form-control" name="mock_category" value="{{ $category->mock_category }}"
                            aria-describedby="mock_category" placeholder="Enter mocktest category">
                    </div>
                    <div class="form-group">
                        <label for="classroom_course_title">Regular Price</label>
                        <input data-validation="required" type="text" class="form-control" name="regular_price"
                            aria-describedby="regular_price" placeholder="Enter regular price" value="{{ $category->regular_price }}">
                    </div>
                    <div class="form-group">
                        <label for="classroom_course_title">Discount Price</label>
                        <input type="text" class="form-control" name="discount_price"
                            aria-describedby="discount_price" placeholder="Enter discount price" value="{{ $category->discount_price }}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Short Description</label>
                        <div>
                            <textarea class="form-control" name="description" id="descriptionedit"> {{ $category->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Exam Format</label>
                        <div>
                            <textarea class="form-control" name="exam_format" id="exam_formatedit"> {{ $category->exam_format }}</textarea>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 30px;">
                        <div class="col-md-6">
                            <div class="card">
                              <img src="{{ asset($category->image) }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <p class="card-text">
                                    <div class="form-group">
                                        <label class="form-control-label">Change Image</label>
                                        <input class="form-control" type="file" name="image" id="image" onchange="mainThambUrl(this)">
                                    </div>
                                    <img src="" id="mainThmb">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#descriptionedit').summernote();
        });

        $(document).ready(function() {
            $('#exam_formatedit').summernote();
        });
    </script>

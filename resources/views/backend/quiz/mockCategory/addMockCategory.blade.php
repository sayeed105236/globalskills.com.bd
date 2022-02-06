<div class="modal fade" id="mockTestAdd" tabindex="-1" role="dialog" aria-labelledby="mockTestAdd"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mockTestAdd">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add-mock') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="classroom_course_title">Mocktest Category</label>
                        <input data-validation="required" type="text" class="form-control" name="mock_category"
                            aria-describedby="mock_category" placeholder="Enter mocktest category">
                    </div>
                    <div class="form-group">
                        <label for="classroom_course_title">Regular Price</label>
                        <input data-validation="required" type="text" class="form-control" name="regular_price"
                            aria-describedby="regular_price" placeholder="Enter regular price">
                    </div>
                    <div class="form-group">
                        <label for="classroom_course_title">Discount Price</label>
                        <input type="text" class="form-control" name="discount_price"
                            aria-describedby="discount_price" placeholder="Enter discount price">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Short Description</label>
                        <div>
                            <textarea class="form-control" name="description" id="description"> </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Exam Format</label>
                        <div>
                            <textarea class="form-control" name="exam_format" id="exam_format"> </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Category Image</label>
                        <input type="file" name="image" class="form-control-file" id="image"
                            onchange="previewImage(this)">
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
            $('#description').summernote();
        });

        $(document).ready(function() {
            $('#exam_format').summernote();
        });
    </script>

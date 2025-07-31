<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="blogForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="formMethod" value="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModalTitle">Add New Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="blogTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="blogTitle" name="title" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="blogImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="blogImage" name="image">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="blogContent" class="form-label">Content</label>
                        <textarea class="form-control" id="blogContent" name="content" rows="4" required></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="blogCategory" class="form-label">Category</label>
                        <input type="text" class="form-control" id="blogCategory" name="category">
                    </div> -->
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" id="modalSubmitButton" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

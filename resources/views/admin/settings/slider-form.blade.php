<!-- Shared Modal for Add/Edit Slider -->
<div class="modal fade" id="sliderModal" tabindex="-1" aria-labelledby="sliderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="sliderForm" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" id="formMethod" value="POST">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sliderModalTitle">Add New Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                    <div class="mb-3 col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" id="sliderTitle" class="form-control" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Subtitle</label>
                        <input type="text" name="subtitle" id="sliderSubtitle" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col-md-6">
                        <label>Button Text</label>
                        <input type="text" name="button_text" id="sliderButtonText" class="form-control">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label>Button Link</label>
                        <input type="text" name="button_link" id="sliderButtonLink" class="form-control">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="modalSubmitButton">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

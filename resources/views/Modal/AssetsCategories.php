<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


<!-- add modal -->
    <div id="add_asset" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Category Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Upload Category Icon</label>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="cat-upload me-3">
                                            <i class="fa fa-plus"></i>
                                            <input class="upload" type="file">
                                        </div>
                                        <div class="cat-upload-view me-2">
                                            <img src="{{ URL::asset('/assets/img/img1.jpg') }}" alt="img">
                                            <a href="#" class="img-close"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section mt-2">
                            <button class="btn btn-primary submit-btns w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

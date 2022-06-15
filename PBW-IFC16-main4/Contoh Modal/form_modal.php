<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Northwind</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!--Title-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Title">Title*</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <input type="text" class="form-control form-control-sm" required="required" id="title" name="title">
                        </div>
                    </div>

                    <!--Description-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Description">Description</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>

                    <!--Release Year-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Release Year">Release Year</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <input type="number" step="1" class="form-control form-control-sm" pattern="[0-9]{4}" id="release_year" name="release_year">
                        </div>
                    </div>

                    <!--Language-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Language">Language*</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <select class="form-select" aria-label="Default select example" required="required" id="language_id" name="language_id">
                                <option value="" selected="selected">-</option>
                            </select>
                        </div>
                    </div>

                    <!--Oiginal Language-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Original Language">Original Language*</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <select class="form-select" aria-label="Default select example" required="required" id="original_language_id" name="original_language_id">
                                <option value="" selected="selected">-</option>
                            </select>
                        </div>
                    </div>

                    <!--Rental Duration-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Rental Duration">Rental Duration</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <div class="input-group">
                                <input type="number" step="1" class="form-control form-control-sm" pattern="[0-9]*" value="1" required="required" id="rental_duration" name="rental_duration">
                                <span class="input-group-text" id="Rental Duration">days</span>
                            </div>
                        </div>
                    </div>

                    <!--Rental Rate-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Rental Rate">Rental Rate*</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <div class="input-group">
                                <span class="input-group-text" id="Rental Rate">$</span>
                                <input type="number" value="4.99" step="0.01" class="form-control form-control-sm" required="required" id="rental_rate" name="rental_rate">
                            </div>
                        </div>
                    </div>

                    <!--Lenght-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Lenght">Lenght</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <div class="input-group">
                                <input type="number" step="1" class="form-control form-control-sm" pattern="[0-9]*" value="1" required="required" id="length" name="length">
                                <span class="input-group-text" id="Lenght">minutes</span>
                            </div>
                        </div>
                    </div>

                    <!--Replacement Cost-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Replacement Cost">Replacement Cost*</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <div class="input-group">
                                <span class="input-group-text" id="Replacement Cost">$</span>
                                <input type="number" step="0.01" class="form-control form-control-sm" required="required" id="replacement_cost" name="replacement_cost" value="19.88">
                            </div>
                        </div>
                    </div>

                    <!--Rating-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="Rating">Rating</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <select class="form-select" aria-label="Default select example" required="required" id="rating" name="rating">
                                <option selected>PG</option>
                                <option value="1">R</option>
                                <option value="2">G</option>
                                <option value="3">NC-17</option>
                                <option value="4">PG-13</option>
                            </select>
                        </div>
                    </div>

                    <!--Special Feature-->
                    <div class="row mb-3">
                        <div class="col-sm-4 col-lg-3 col-xxl-2 col-form-label">
                            <label for="duration">Special Feature</label>
                        </div>
                        <div class="col-sm-8 col-lg-9 col-xxl-10">
                            <select class="form-select" multiple="multiple" aria-label="multiple select example" id="special_features{}" size="3" name="special_features{}">
                                <option value="0">Trailers</option>
                                <option value="1">Commentaries</option>
                                <option value="2">Deleted Scenes</option>
                                <option value="3">Behind the Scenes</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
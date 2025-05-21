<?php include 'includes/header.php'; ?>

<section class="page-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <div class="page-title">
                <h4>Beat Library</h4>
                <h6>Search, filter, and manage your beats</h6>
            </div>
        </div>
        <!-- Add Beat Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBeatModal">Add New Beat</button>
        <div class="modal fade" id="addBeatModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Beat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="newBeatName">Beat Name</label>
                                <input type="text" class="form-control" id="newBeatName" placeholder="Beat name">
                            </div>
                            <div class="form-group">
                                <label for="newBeatArtist">Artist Name</label>
                                <input type="text" class="form-control" id="newBeatArtist" placeholder="Artist name">
                            </div>
                            <div class="form-group">
                                <label for="newBeatGenre">Beat Genre</label>
                                <select class="form-control" id="newBeatGenre">
                                    <option value="">All</option>
                                    <option value="Hip-Hop">Hip-Hop</option>
                                    <option value="Rap">Rap</option>
                                    <option value="RnB">RnB</option>
                                    <option value="Pop">Pop</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newBeatBPM">Beat BPM</label>
                                <input type="number" class="form-control" id="newBeatBPM" placeholder="Beat BPM">
                            </div>
                            <div class="form-group">
                                <label for="newBeatDuration">Beat Duration</label>
                                <input type="text" class="form-control" id="newBeatDuration" placeholder="Beat duration">
                            </div>
                            <div class="form-group">
                                <label for="newBeatUpload">Upload Beat</label>
                                <input type="file" class="form-control" id="newBeatUpload" accept=".mp3">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add Beat</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="searchBeat" placeholder="Search for a beat">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control" id="filterBy">
                                        <option value="">All</option>
                                        <option value="genre">Genre</option>
                                        <option value="instruments">Instruments</option>
                                        <option value="mood">Mood</option>
                                        <option value="tempo">Tempo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control" id="sortBy">
                                        <option value="">Default</option>
                                        <option value="latest">Latest</option>
                                        <option value="popular">Popular</option>
                                        <option value="bestselling">Bestselling</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="beat-library">
                            <div class="col-lg-4">
                                <div class="card card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


<?php include 'includes/footer.php'; ?>
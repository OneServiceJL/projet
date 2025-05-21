<?php include 'includes/header.php'; ?>

<section class="page-wrapper">
    <div class="container-fluid">
        <div class="page-header">
            <div class="page-title">
                <h4>TOP 5 SAI Copyright Management</h4>
                <h6>Manage your copyright claims and royalties</h6>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Song</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Song Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Artist</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Label</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Copyright Date</label>
                                <input type="date" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Royalties</label>
                                <input type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Upload MP3 File</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" accept=".mp3">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Add Song</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Copyright Claims</h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Song Title</th>
                                    <th scope="col">Artist</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Copyright Date</th>
                                    <th scope="col">Royalties</th>
                                    <th scope="col">Audio</th>
                                    <th scope="col"> </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Stairway to Heaven</td>
                                    <td>Led Zeppelin</td>
                                    <td>Atlantic Records</td>
                                    <td>1971</td>
                                    <td>4.5%</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Imagine</td>
                                    <td>John Lennon</td>
                                    <td>Capitol Records</td>
                                    <td>1971</td>
                                    <td>6.5%</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>Bohemian Rhapsody</td>
                                    <td>Queen</td>
                                    <td>EMI Records</td>
                                    <td>1975</td>
                                    <td>5.5%</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


<?php include 'includes/footer.php'; ?>
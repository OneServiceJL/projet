<?php include 'includes/header.php'; ?>

<section class="page-wrapper">
    <div class="container-fluid">
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-database me-2"></i> Base de Données des Artistes</h2>
                <div>
                    <button class="btn btn-primary me-2">
                        <i class="fas fa-plus me-2"></i> Nouvel Artiste
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-file-export me-2"></i> Exporter
                    </button>
                </div>
            </div>

            <!-- Filtres Avancés -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option>Tous</option>
                                <option>Signé</option>
                                <option>En négociation</option>
                                <option>Ancien</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Genre</label>
                            <select class="form-select">
                                <option>Tous</option>
                                <option>Afrobeat</option>
                                <option>Hip-Hop</option>
                                <option>R&B</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Date de Signature</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">
                                <i class="fas fa-filter me-2"></i> Appliquer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tableau Principal -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="artistsTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Artiste</th>
                                    <th>Genre</th>
                                    <th>Statut</th>
                                    <th>Contrat</th>
                                    <th>Streams</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ART-001</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40" class="rounded-circle me-3">
                                            <div>
                                                <h6 class="mb-0">Nova Rhythm</h6>
                                                <small class="text-muted">@novarhythm</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Afrobeat</td>
                                    <td><span class="badge bg-success">Actif</span></td>
                                    <td>31/12/2025</td>
                                    <td>12.4M</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Plus d'artistes ici -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

    <script>
        $(document).ready(function() {
            $('#artistsTable').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                }
            });
        });
    </script>



<?php include 'includes/footer.php'; ?>
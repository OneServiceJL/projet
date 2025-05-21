<?php include 'includes/header.php'; ?>


<section class="page-wrapper">
    <div class="container-fluid">
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-search-plus me-2"></i> Découverte de Talents</h2>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newAuditionModal">
                    <i class="fas fa-plus me-2"></i> Nouvelle Audition
                </button>
            </div>

            <!-- Filtres -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Genre Musical</label>
                            <select class="form-select">
                                <option>Tous</option>
                                <option>Afrobeat</option>
                                <option>Hip-Hop</option>
                                <option>R&B</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Statut</label>
                            <select class="form-select">
                                <option>Tous</option>
                                <option>Nouveau</option>
                                <option>En évaluation</option>
                                <option>Signé</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-outline-secondary w-100">
                                <i class="fas fa-filter me-2"></i>Filtrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liste des Auditions -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card audition-card h-100">
                        <div class="card-header bg-light">
                            <span class="badge badge-new text-white">Nouveau</span>
                            <span class="float-end">15/06/2023</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-3">
                                <img src="https://via.placeholder.com/60" class="rounded-circle me-3">
                                <div>
                                    <h5 class="mb-1">Marie Dubois</h5>
                                    <p class="text-muted mb-1">Soul / R&B</p>
                                    <div class="d-flex">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="fas fa-star text-warning me-1"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">Voix puissante avec un timbre unique. Potentiel élevé pour les ballades R&B.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Évalué par: Jean D.</small>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary me-1">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus de cartes d'audition ici -->
            </div>

            <!-- Modal Nouvelle Audition -->
            <div class="modal fade" id="newAuditionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nouvelle Audition</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Prénom</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Genre Musical</label>
                                        <select class="form-select">
                                            <option>Sélectionner</option>
                                            <option>Afrobeat</option>
                                            <option>Hip-Hop</option>
                                            <option>R&B</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date d'Audition</label>
                                        <input type="datetime-local" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Notes/Observations</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Fichiers (MP3/MP4)</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialisation des fonctionnalités ici
        });
    </script>
<?php include 'includes/footer.php'; ?>
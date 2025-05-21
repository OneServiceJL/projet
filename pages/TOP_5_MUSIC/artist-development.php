<?php include 'includes/header.php'; ?>


<section class="page-wrapper">
    <div class="container-fluid">
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-chalkboard-teacher me-2"></i> Développement Artistique</h2>
                <div>
                    <button class="btn btn-primary me-2">
                        <i class="fas fa-calendar-plus me-2"></i> Nouvelle Session
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-chart-line me-2"></i> Progression
                    </button>
                </div>
            </div>

            <!-- Onglets -->
            <ul class="nav nav-tabs mb-4" id="devTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="coaching-tab" data-bs-toggle="tab" data-bs-target="#coaching" type="button">Coaching Vocal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="orientation-tab" data-bs-toggle="tab" data-bs-target="#orientation" type="button">Orientation Musicale</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="training-tab" data-bs-toggle="tab" data-bs-target="#training" type="button">Programmes de Formation</button>
                </li>
            </ul>

            <!-- Contenu des Onglets -->
            <div class="tab-content" id="devTabsContent">
                <!-- Coaching Vocal -->
                <div class="tab-pane fade show active" id="coaching" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-0">Sessions de Coaching</h5>
                                <select class="form-select w-auto">
                                    <option>Tous les artistes</option>
                                    <option>Nouveaux signés</option>
                                    <option>En préparation d'album</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Artiste</th>
                                        <th>Dernière Session</th>
                                        <th>Prochaine Session</th>
                                        <th>Coach</th>
                                        <th>Progrès</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://via.placeholder.com/40" class="rounded-circle me-2">
                                                <span>Nova Rhythm</span>
                                            </div>
                                        </td>
                                        <td>10/06/2023</td>
                                        <td>24/06/2023</td>
                                        <td>Sophie Martin</td>
                                        <td>
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-success" style="width: 75%"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">Détails</button>
                                        </td>
                                    </tr>
                                    <!-- Plus de lignes ici -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Orientation Musicale -->
                <div class="tab-pane fade" id="orientation" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Analyse de Marché</h5>
                                </div>
                                <div class="card-body">
                                    <canvas id="genreTrendChart" height="200"></canvas>
                                    <p class="mt-3 text-muted">Tendances actuelles par genre musical</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="mb-0">Recommandations d'Artistes</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        <strong>Nova Rhythm:</strong> Potentiel crossover vers le marché international
                                    </div>
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>Luna Wave:</strong> Besoin de diversification musicale
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programmes de Formation -->
                <div class="tab-pane fade" id="training" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Programmes Disponibles</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Perfectionnement Vocal</h5>
                                            <p class="card-text">8 semaines intensives avec coach certifié</p>
                                            <ul class="list-group list-group-flush mb-3">
                                                <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Technique respiratoire</li>
                                                <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Gestion du stress</li>
                                                <li class="list-group-item"><i class="fas fa-check text-success me-2"></i>Harmonisation</li>
                                            </ul>
                                            <button class="btn btn-primary w-100">Inscrire un Artiste</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Plus de programmes ici -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
        // Scripts pour les graphiques et fonctionnalités
    </script>


<?php include 'includes/footer.php'; ?>
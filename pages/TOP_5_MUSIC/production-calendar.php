<?php include 'includes/header.php'; ?>


<section class="page-wrapper">
    <div class="container-fluid">
        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="fas fa-calendar-alt me-2"></i> Calendrier de Productions</h2>
                <div>
                    <button class="btn btn-primary me-2" id="addEventBtn">
                        <i class="fas fa-plus me-2"></i> Nouvel Événement
                    </button>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary" id="monthView">Mois</button>
                        <button class="btn btn-outline-secondary" id="weekView">Semaine</button>
                        <button class="btn btn-outline-secondary" id="dayView">Jour</button>
                    </div>
                </div>
            </div>

            <!-- Calendrier -->
            <div class="card">
                <div class="card-body">
                    <div id="productionCalendar"></div>
                </div>
            </div>

            <!-- Modal Événement -->
            <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nouvel Événement de Production</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="eventForm">
                                <div class="mb-3">
                                    <label class="form-label">Titre</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Artiste(s)</label>
                                    <select class="form-select" multiple>
                                        <option>Nova Rhythm</option>
                                        <option>Luna Wave</option>
                                        <option>DJ Kero</option>
                                    </select>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Date de début</label>
                                        <input type="datetime-local" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date de fin</label>
                                        <input type="datetime-local" class="form-control" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="form-select">
                                        <option>Enregistrement</option>
                                        <option>Mixage</option>
                                        <option>Mastering</option>
                                        <option>Clip vidéo</option>
                                        <option>Réunion créative</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Lieu/Studio</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3"></textarea>
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

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/fr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('productionCalendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'fr',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    {
                        title: 'Session Enregistrement - Nova Rhythm',
                        start: '2023-06-15T10:00:00',
                        end: '2023-06-15T18:00:00',
                        color: '#6a11cb',
                        extendedProps: {
                            type: 'enregistrement',
                            artiste: 'Nova Rhythm',
                            lieu: 'Studio A'
                        }
                    },
                    // Plus d'événements ici
                ],
                eventClick: function(info) {
                    alert('Événement: ' + info.event.title);
                }
            });
            calendar.render();

            // Gestion des boutons de vue
            document.getElementById('monthView').addEventListener('click', function() {
                calendar.changeView('dayGridMonth');
            });
            document.getElementById('weekView').addEventListener('click', function() {
                calendar.changeView('timeGridWeek');
            });
            document.getElementById('dayView').addEventListener('click', function() {
                calendar.changeView('timeGridDay');
            });

            // Gestion du modal
            document.getElementById('addEventBtn').addEventListener('click', function() {
                var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                modal.show();
            });
        });
    </script>


<?php include 'includes/footer.php'; ?>
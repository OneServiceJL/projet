<?php include 'includes/header.php'; ?>

<section class="page-wrapper">
    <div class="container-fluid">
        <div class="studio-booking-container">
            <!-- Section 1 : Formulaire de Réservation -->
            <div class="booking-form">
                <h2><i class="fa fa-calendar-plus-o"></i> Nouvelle Réservation</h2>
                <form id="bookingForm">
                    <!-- Champs clés -->
                    <div class="form-group">
                        <label>Artiste/Projet :</label>
                        <select class="form-control" name="artist" required>
                            <option value="">-- Sélectionnez --</option>
                            <?php foreach ($artists as $artist): ?>
                                <option value="<?= $artist['id'] ?>"><?= $artist['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Date :</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Heure début :</label>
                            <input type="time" name="start_time" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Heure fin :</label>
                            <input type="time" name="end_time" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Studio :</label>
                        <select name="studio" class="form-control" required>
                            <option value="studio_a">Studio A (Mixage)</option>
                            <option value="studio_b">Studio B (Enregistrement Live)</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> Confirmer
                    </button>
                </form>
            </div>

            <!-- Section 2 : Calendrier des Réservations -->
            <div class="booking-calendar">
                <h2><i class="fa fa-calendar"></i> Calendrier</h2>
                <div id="calendar"></div> <!-- Intégration FullCalendar.js -->
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                    <a href="index.php">
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Company Branches -->
                <li class="menu-title">
                    <span>Divisions</span>
                </li>

                <!-- Top 5 Sai (Studio Production) -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-music" aria-hidden="true"></i>
                        <span>TOP 5 MUSIC</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <div>
                            <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                        </div>
                        <!-- Département Artistique & A&R -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Artistique & A&R</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="artist-discovery.php">Découverte d'artistes</a></li>
                                <li><a href="artist-development.php">Développement artistique</a></li>
                                <li><a href="artist-database.php">Base données artistes</a></li>
                                <li><a href="production-calendar.php">Calendrier de productions</a></li>
                            </ul>
                        </li>

                        <!-- Département Production Musicale -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                                <span>Production Musicale</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="studio-bookings.php">Réservation studio</a></li>
                                <li><a href="recording-sessions.php">Sessions d'enregistrement</a></li>
                                <li><a href="beat-library.php">Librairie de beats</a></li>
                                <li><a href="copyright-management.php">Gestion des droits</a></li>
                            </ul>
                        </li>

                        <!-- Département Marketing & Promotion -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                <span>Marketing & Promotion</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="digital-campaigns.php">Campagnes digitales</a></li>
                                <li><a href="media-kits.php">Kits médias</a></li>
                                <li><a href="streaming-analytics.php">Analytics streaming</a></li>
                                <li><a href="social-media.php">Réseaux sociaux</a></li>
                            </ul>
                        </li>

                        <!-- Département Événements & Tournées -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>Événements & Tournées</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="concert-booking.php">Booking concerts</a></li>
                                <li><a href="tour-schedule.php">Planning tournées</a></li>
                                <li><a href="event-budget.php">Budgets événements</a></li>
                                <li><a href="venue-database.php">Base données salles</a></li>
                            </ul>
                        </li>

                        <!-- Département Digital & Plateformes -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-digital-tachograph" aria-hidden="true"></i>
                                <span>Digital & Plateformes</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="streaming-optimization.php">Optimisation streaming</a></li>
                                <li><a href="platform-dashboard.php">Dashboard plateformes</a></li>
                                <li><a href="seo-management.php">Gestion SEO</a></li>
                                <li><a href="content-strategy.php">Stratégie de contenu</a></li>
                            </ul>
                        </li>

                        <!-- Département Juridique -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-gavel" aria-hidden="true"></i>
                                <span>Juridique & Droits</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="contracts-management.php">Gestion des contrats</a></li>
                                <li><a href="royalties-distribution.php">Distribution royalties</a></li>
                                <li><a href="copyright-disputes.php">Litiges droits d'auteur</a></li>
                            </ul>
                        </li>

                        <!-- Département Analytics -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-chart-line" aria-hidden="true"></i>
                                <span>Analytics & Data</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="music-trends.php">Trends musicales</a></li>
                                <li><a href="revenue-reports.php">Rapports revenus</a></li>
                                <li><a href="fan-demographics.php">Démographie fans</a></li>
                                <li><a href="success-predictions.php">Prédictions de succès</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <!-- Top 5 Broadcasting -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-tv" aria-hidden="true"></i>
                        <span>TOP 5 Broadcasting</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul>
                        <div>
                            <li><a href="../TOP_5_BROADCASTING/dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                        </div>
                        <!-- Département Artistique & A&R -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-headphones" aria-hidden="true"></i>
                                <span>Energy Radio</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="../TOP_5_BROADCASTING/programming.php">Département de Programmation</a></li>
                                <li><a href="../TOP_5_BROADCASTING/technical.php">Département Technique & Ingénierie</a></li>
                                <li><a href="../TOP_5_BROADCASTING/content.php">Département Contenu & Production</a></li>
                                <li><a href="../TOP_5_BROADCASTING/regie.php">Département Régie & Direct</a></li>
                                <li><a href="../TOP_5_BROADCASTING/digital.php">Département Digital & Streaming</a></li>
                                <li><a href="../TOP_5_BROADCASTING/legal.php">Département Juridique & Droits</a></li>
                                <li><a href="../TOP_5_BROADCASTING/commercial.php">Département Commercial & Publicité</a></li>
                                <li><a href="../TOP_5_BROADCASTING/data.php">Département Data & Intelligence Artificielle</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
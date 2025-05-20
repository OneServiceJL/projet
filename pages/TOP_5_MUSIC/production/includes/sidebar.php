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
                        <!-- Département Artistique & A&R -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Artistique & A&R</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="TOP_5_MUSIC/artistique/artist-discovery.php">Découverte d'artistes</a></li>
                                <li><a href="TOP_5_MUSIC/artistique/artist-development.php">Développement artistique</a></li>
                                <li><a href="TOP_5_MUSIC/artistique/artist-database.php">Base données artistes</a></li>
                                <li><a href="TOP_5_MUSIC/artistique/production-calendar.php">Calendrier de productions</a></li>
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
                                <li><a href="TOP_5_MUSIC/production/studio-bookings.php">Réservation studio</a></li>
                                <li><a href="TOP_5_MUSIC/production/recording-sessions.php">Sessions d'enregistrement</a></li>
                                <li><a href="TOP_5_MUSIC/production/beat-library.php">Librairie de beats</a></li>
                                <li><a href="TOP_5_MUSIC/production/copyright-management.php">Gestion des droits</a></li>
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
                                <li><a href="TOP_5_MUSIC/digital/digital-campaigns.php">Campagnes digitales</a></li>
                                <li><a href="TOP_5_MUSIC/digital/media-kits.php">Kits médias</a></li>
                                <li><a href="TOP_5_MUSIC/digital/streaming-analytics.php">Analytics streaming</a></li>
                                <li><a href="TOP_5_MUSIC/digital/social-media.php">Réseaux sociaux</a></li>
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
                                <li><a href="TOP_5_MUSIC/evenements/concert-booking.php">Booking concerts</a></li>
                                <li><a href="TOP_5_MUSIC/evenements/tour-schedule.php">Planning tournées</a></li>
                                <li><a href="TOP_5_MUSIC/evenements/event-budget.php">Budgets événements</a></li>
                                <li><a href="TOP_5_MUSIC/evenements/venue-database.php">Base données salles</a></li>
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
                                <li><a href="TOP_5_MUSIC/digital/streaming-optimization.php">Optimisation streaming</a></li>
                                <li><a href="TOP_5_MUSIC/digital/platform-dashboard.php">Dashboard plateformes</a></li>
                                <li><a href="TOP_5_MUSIC/digital/seo-management.php">Gestion SEO</a></li>
                                <li><a href="TOP_5_MUSIC/digital/content-strategy.php">Stratégie de contenu</a></li>
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
                                <li><a href="TOP_5_MUSIC/juridique/contracts-management.php">Gestion des contrats</a></li>
                                <li><a href="TOP_5_MUSIC/juridique/royalties-distribution.php">Distribution royalties</a></li>
                                <li><a href="TOP_5_MUSIC/juridique/copyright-disputes.php">Litiges droits d'auteur</a></li>
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
                                <li><a href="TOP_5_MUSIC/analytics/music-trends.php">Trends musicales</a></li>
                                <li><a href="TOP_5_MUSIC/analytics/revenue-reports.php">Rapports revenus</a></li>
                                <li><a href="TOP_5_MUSIC/analytics/fan-demographics.php">Démographie fans</a></li>
                                <li><a href="TOP_5_MUSIC/analytics/success-predictions.php">Prédictions de succès</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <!-- 5 Star Event -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-calendar-alt" aria-hidden="true"></i>
                        <span>5 Star Event</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="dashboard-event.php">Dashboard Event</a></li>
                        <li><a href="event-bookings.php">Event Bookings</a></li>
                        <li><a href="equipment-rentals.php">Equipment Rentals</a></li>
                        <li><a href="wedding-packages.php">Wedding Packages</a></li>
                        <li><a href="concert-management.php">Concert Management</a></li>
                        <li><a href="event-reports.php">Event Reports</a></li>
                    </ul>
                </li>
                
                <!-- Energy Radio -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Energy Radio</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="radio-schedule.php">Broadcast Schedule</a></li>
                        <li><a href="ad-spots.php">Ad Spots</a></li>
                        <li><a href="listener-feedback.php">Listener Feedback</a></li>
                        <li><a href="radio-reports.php">Radio Reports</a></li>
                    </ul>
                </li>
                
                <!-- Top 5 Management -->
                <li class="menu-title">Management</li>
                
                <!-- Accounting -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <span>Accounting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="invoices.php">Invoices</a></li>
                        <li><a href="expenses.php">Expenses</a></li>
                        <li><a href="payroll.php">Payroll</a></li>
                        <li><a href="financial-reports.php">Financial Reports</a></li>
                    </ul>
                </li>
                
                <!-- Equipment Store -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        <span>Equipment Store</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="equipment-list.php">Equipment Inventory</a></li>
                        <li><a href="maintenance-log.php">Maintenance Log</a></li>
                        <li><a href="equipment-reports.php">Equipment Reports</a></li>
                    </ul>
                </li>
                
                <!-- HR Management -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>HR Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="employees.php">Employees</a></li>
                        <li><a href="attendance.php">Attendance</a></li>
                        <li><a href="leave-management.php">Leave Management</a></li>
                        <li><a href="performance.php">Performance</a></li>
                    </ul>
                </li>
                
                <!-- Shared Services -->
                <li class="menu-title">Services</li>
                
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Clients</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="client-list.php">Client List</a></li>
                        <li><a href="add-client.php">Add Client</a></li>
                        <li><a href="contracts.php">Contracts</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <span>Reports</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="branch-reports.php">Branch Reports</a></li>
                        <li><a href="financial-summary.php">Financial Summary</a></li>
                        <li><a href="performance-reports.php">Performance Reports</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="settings.php">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
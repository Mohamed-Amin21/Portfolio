<?php
$messageEnvoye = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $messageEnvoye = true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Réseaux Informatiques</title>
    <link rel="stylesheet" href="decor.css">
</head>

<body>

<header>
    <h1>Portfolio – Réseaux Informatiques</h1>
    <nav>
        <a href="#qui">Qui suis-je ?</a>
        <a href="#competences">Mes compétences</a>
        <a href="#realisations">Mes réalisations</a>
        <a href="#veille">Veille technologique</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section id="qui">
    <h2>Qui suis-je ?</h2>
    <p>
        Étudiant(e) / Technicien(ne) en réseaux informatiques, passionné(e) par les infrastructures réseaux,
        la cybersécurité et l’administration des systèmes. Ce portfolio présente mes compétences,
        mes projets et ma veille technologique.
    </p>
</section>

<section id="competences">
    <h2>Mes compétences</h2>
    <div class="competences">
        <div class="card">Administration réseau (LAN/WAN)</div>
        <div class="card">Configuration routeurs & switches</div>
        <div class="card">TCP/IP, DNS, DHCP</div>
        <div class="card">Sécurité réseau & firewall</div>
        <div class="card">Linux / Windows Server</div>
        <div class="card">Virtualisation (VMware, VirtualBox)</div>
    </div>
</section>

<section id="realisations">
    <h2>Mes réalisations</h2>
    <div class="realisations">
        <div class="card">
            <h3>Réseau d'entreprise</h3>
            <p>Mise en place d’un réseau local avec VLAN, DHCP et DNS.</p>
        </div>
        <div class="card">
            <h3>Serveur Linux</h3>
            <p>Installation et sécurisation d’un serveur Linux.</p>
        </div>
        <div class="card">
            <h3>Supervision réseau</h3>
            <p>Surveillance avec outils de monitoring.</p>
        </div>

    </div>
</section>

<section id="veille">
    <h2>Veille technologique</h2>
    <p>
        Suivi des évolutions des réseaux informatiques : IPv6, cybersécurité,
        cloud computing, intelligence artificielle appliquée aux réseaux,
        nouvelles normes et protocoles.
    </p>
    <a href="Veille_Technologie_Intersport_20251105_001253_0000.pdf" target="_blank"><img alt="Veille Technologique Intersport" src="Images/veille.png" width="300" height="175"></a>
</section>

<section id="contact">
    <h2>Contact</h2>

    <?php if ($messageEnvoye): ?>
        <p class="success">Message envoyé avec succès !</p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>
</section>

<footer>
    <p>© 2026 - Portfolio Réseaux Informatiques</p>
    <a href="https://www.linkedin.com/in/mohamed-amin-mdarbi-radidchi-88a405166/" target="_blank"><img alt="LinkedIn" src="Images/R.png" width="30" height="30"></a>
    <br>
    <br>
</footer>

</body>
</html>

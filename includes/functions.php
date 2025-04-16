<?php

// recupere toutes les offres
function getJobs($pdo)
{
    $sql = "SELECT * FROM job_offers";
    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// recupere toutes les 4 dernieres offres triées par date
function getLastsJobs($pdo)
{
    $sql = "SELECT * FROM job_offers
                 ORDER BY created_at DESC
                 LIMIT 4
                 ";

    $stmt = $pdo->query($sql);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// la suite ....

// la liste des entreprise 
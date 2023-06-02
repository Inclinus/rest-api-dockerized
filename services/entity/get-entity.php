<?php

echo json_encode(getDatabaseConnection()->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC));
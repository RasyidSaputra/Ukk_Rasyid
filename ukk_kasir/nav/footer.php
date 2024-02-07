<section>
    <div class="container">
        <div class="card mt-2">
            <div class="card-body">
                <?php

                if ($datapetugas['Level'] == 1) {

                    echo '<p class="text-center fw-bold mb-0">Selamat datang administrator ' . $datapetugas['Username'] . ',' . ' silahkan menikmati :)</p>';
                } else {
                    echo '<p class="text-center fw-bold mb-0">Selamat datang petugas, silahkan menikmati :)</p>';
                }
                ?>

            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <p class="text-center fw-bold mb-0">&copy;UKK 2024 RPL By: Rasyid Saputra </p>
            </div>
        </div>
    </div>

</section>


</div>
</body>

</html>
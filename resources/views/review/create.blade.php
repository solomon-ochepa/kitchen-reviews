<x-guest-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <section class="container border col-6">
                <section class="form p-5 bg-secondary">
                    <form action="" method="post">
                        <section class="header border">
                            <header>
                                <h1 class="text-center">IGNITION633</h1>
                                <h4 class="text-center"> KITCHEN REVIEWS </h4>
                            </header>
                        </section>

                        <section class="border table-secondary">
                            <div>
                                <div>
                                    <label for="">Name</label>
                                    <input type="text" name="name" placeholder="name" required>
                                </div>
                                <br>
                                <div>
                                    <label for="">Date</label>
                                    <input type="date-int" name="date" placeholder="date" required>
                                </div>
                                <br>
                                <div>
                                    <label for="">Meal</label>
                                    <input type="text" name="meal" placeholder="meal">
                                </div>
                                <br>
                                <div>
                                    <textarea name="note" id="" cols="50" rows="5" placeholder="Note"></textarea>
                                </div>
                                <br>
                                <div>
                                    <label for="">Rate</label>
                                    <select name="rate" id="rate">
                                        <option value="1.2.3.4.5">
                                            select
                                        </option>
                                        <?php
                                        for ($i = 1; $i <= 5; $i++) {
                                        ?>
                                        <option value="1.2.3.4.5"><?= $i ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <div>
                                        <input type="submit" value="Submit Review">
                                    </div>

                                    <script src="index.js"></script>
                                    <script src="validation.js"></script>
                                </div>
                        </section>
                    </form>
                </section>
            </section>
        </div>
    </div>
    
</x-guest-layout>

<?php
// Header section
include "view/header.php";
?>
<!-- Main section -->
<main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="index.php?action=add" method="post">
                    <div class="form-group row justify-content-center">
                        <label for="name" class="col-sm-3 col-form-label">Nom de l&apos;Argonaute</label>
                        <div class="col-sm-6">
                            <input id="name" class="form-control" name="name" type="text" placeholder="Charalampos" pattern="[A-z]" required />
                        </div>
                        <button type="submit" class="btn btn-danger my-2 my-sm-0">Envoyer</button>
                    </div>      
                </form>
            </div>
        </div>
    </div>


    
  

  <!-- Member list -->
  <h2 class="my-4">Membres de l'équipage</h2>
  <section class="member-list my-2">
    <ul>
    <?php     
        foreach ( $argonautes as $argonaute ) {
            ?>
            <li class="member-item"><?=htmlspecialchars($argonaute->getName())?></li>
            <?php
        }
    ?>   
    </ul>
  </section>
</main>
<?php
include "view/footer.php";
?>
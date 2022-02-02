<section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h1 class="section-heading mb-4">
                            <span class="section-heading-upper">Commentaires</span>
                        </h1>

                    </div>
                </div>
            </div>
        </section>
<section class="page-section">
    <div class="container"> 
            <form action="index.php?loc=commentaires" class="input-group">
                <div>
                   <span class="input-group-text">Pseudo</span>
                    <input type="text" class ="form-control" placeholder="Username  15car max" aria-label="Username" aria-describedby="addon-wrapping" name="pseudo" id=""> 
                </div>
                
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comments"></textarea>
                    <label for="floatingTextarea2">Comments 500car max</label>
                </div>
                <button type="submit">Poster</button>
            </form>

    </div>
</section>
<section class="page-section">
    <div class="container bg-faded rounded">
        <h2>Commentaires:</h2>
        <div><?="test" ?></div>
    </div>
</section>
<?php
include "./scripts/document_cat.php";
if(!isset($_SESSION['user_id'])){
    header('location:index.php?page=documents');
}
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">Upload Documents</h2>
            <form method="post" action="index.php?execute=upload_doc" enctype="multipart/form-data" class="needs-validation" novalidate>
                <!-- Cover Upload -->
                <div class="mb-3">
                    <label for="cover" class="form-label">Upload Cover</label>
                    <input type="file" class="form-control" id="cover" name="cover" accept=".jpg,.jpeg,.png" required>
                    <div class="form-text">Upload an image for the document cover (only .jpg, .jpeg, .png).</div>
                    <div class="invalid-feedback">Please upload a valid image file (e.g., .jpg, .png).</div>
                </div>

                <!-- PDF Upload -->
                <div class="mb-3">
                    <label for="pdf_file" class="form-label">Upload PDF File</label>
                    <input type="file" class="form-control" id="pdf_file" name="pdf_file" accept=".pdf" required>
                    <div class="form-text">Upload the document in PDF format (only .pdf).</div>
                    <div class="invalid-feedback">Please upload a valid PDF file.</div>
                </div>

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                    <div class="invalid-feedback">Please provide a title for the document.</div>
                </div>

                <!-- Overview -->
                <div class="mb-3">
                    <label for="overview" class="form-label">Overview</label>
                    <textarea class="form-control" id="overview" name="overview" rows="4" placeholder="Provide an overview of the document" required></textarea>
                    <div class="invalid-feedback">Please provide an overview of the document.</div>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="" selected disabled>Choose category</option>
                        <?php foreach ($document_categories as $category): ?>
                            <option value="<?= htmlspecialchars($category['d_cat_id']); ?>">
                                <?= htmlspecialchars($category['d_cat_label']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Please select a category.</div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Upload Document</button>
                </div>
            </form>
        </div>
    </div>
</div>

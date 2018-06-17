<?php
require_once __DIR__ . '/../templates/_head.php';
require_once __DIR__ . '/_nav.php';?>
<br>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="index.php?action=contactMsg"
                      method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="fas fa-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Music Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                <address>
                    <strong>GerrysJukebox,</strong><br>
                    Blanchardstown Rd N,<br>
                    Blanchardstown,<br>
                    Dublin 15<br>
                    <abbr title="Phone" class="glyphicon glyphicon-earphone"></abbr>
                    (123) 456-7890
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:#">admin@gerrysjukebox.com</a>
                </address>
            </form>
        </div>
    </div>
</div>
    <br><br>
<?php require_once __DIR__ . '/_footer.php'; ?>

        <div class="row heading clearfix">
            <h1>Treerock</h1>
            <p class="subheading">
                Sandbox Projects
                <br />/ HTML5 Drag and Drop Image Loading (FileReader) 
            </p>
        </div>

        <div class="row sb-project clearfix show">
            <div class="col col-8">
                <p id="fr-status" class="fr-status">File API &amp; FileReader API not supported so this won't work.</p>
                <div id="holder"></div>
            </div>
            <div class="col col-4 meta">
                <h2>About</h2>
                <p>This is me playing around with the File Reader API. Idea taken from 
                    <a href="http://jsfiddle.net/jimschubert/DqcUg/">this example on JSFiddle</a>.</p>
                <p>It uses HTML5 Drag and Drop<sup>[3]</sup> features that allow you to grab local files and drag them onto a webpage. The ondrop event handler fires when a file is 'dropped' on top of the #holder box. The dragged file can then be obtained from the FileList object.</p>
                <p>Then the FileReader API<sup>[4]</sup> takes the file and users the readAsDataUrl method to creat a data: URL representing the file's data.</p>
                <p>To display the image just update the box background with this image data url.</p>
                <ul class="reading-list">
                    <li>[1]: <a href="//www.html5rocks.com/en/tutorials/file/dndfiles/">Using the File APIs</a>
                    </li>
                    <li>[2]: <a href="//www.w3.org/TR/file-upload/">W3C File Specification</a></li>
                    <li>[3]: <a href="//developer.mozilla.org/en-US/docs/DragDrop/Drag_and_Drop">Drag and Drop</a></li>
                    <li>[4]: <a href="//developer.mozilla.org/en-US/docs/Web/API/FileReader">FileReader API</a></li>
                </ul>
                <h2>Meta</h2>
                <p>Created June 2013</p>
            </div>
        </div>
        <div class="row sb-desc clearfix">
            <div class="col col-6" id="meta">
                <p>

                </p>
            </div>
            <div class="col col-6">
        

            </div>
        </div>

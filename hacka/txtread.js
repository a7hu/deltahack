function readMultipleFiles(C:/Users/Danielle/Documents/Visual Studio 2013/Projects/nymihack/nymihack/example.txt) {
    //Retrieve all the files from the FileList object
    var files = evt.target.files;

    if (files) {
        for (var i = 0, f; f = files[i]; i++) {
            var r = new FileReader();
            r.onload = (function (f) {
                return function (e) {
                    var contents = e.target.result;
                    alert(contents);
                };
            })(f);
            r.readAsText(f);
        }
    } else {
        alert("Failed to load files");
    }
}
document.getElementById('fileinput').addEventListener('change', readMultipleFiles, false);​
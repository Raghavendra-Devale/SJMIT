from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def upload_file():
    if request.method == 'POST':
        # check if the post request has the file part
        if 'file' not in request.files:
            return 'No file part in the request'
        
        file = request.files['file']
        
        # if the user does not select a file, the browser submits an empty part without a filename
        if file.filename == '':
            return 'No file selected'
        
        # process the file here (e.g., save it to disk, perform some operations, etc.)
        # for demonstration purposes, we will just print the filename
        print('Uploaded file:', file.filename)
        
        return 'File uploaded successfully'
    
    return render_template('upload.html')

if __name__ == '__main__':
    app.run(debug=True)

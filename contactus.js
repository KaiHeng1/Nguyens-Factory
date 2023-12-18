//selecting all required elements
document.addEventListener("DOMContentLoaded", function() {

//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
  dragFile = dropArea.querySelector(".drag-file"),
  button = dropArea.querySelector(".file-input-button"),
  input = dropArea.querySelector(".file-input");

let documentImages = document.querySelector("#document-images");

// Files array to check whether there is any file 
// selected or not
let documentFileObj = {
  fileName: []
};


// Input validation to check whether the fileName
// array in documentFileObj has any file or not and
// throw the error accordingly
const validationInputs = (container, dataObject) => {
  const errorMessage = container.querySelector("#input-empty-error");
  const emptyFields = [];
  for (const key in dataObject) {
    if (dataObject[key].length <= 0) {
      emptyFields.push(key.toUpperCase());
    }
  }
  errorMessage.textContent = `Please fill ${emptyFields.join()} fields!!`;
  errorMessage.classList.remove("hidden");
  setTimeout(() => {
    errorMessage.classList.add("hidden");
  }, 2000);
};



button.onclick = () => {
  input.click(); //if user click on the button then the input also gets clicked
};

input.addEventListener("change", function (e) {
  const target = e.target;
  setttingFileValue(target);
});

        const form = document.querySelector("form"); 
  
        // Prevent form submission on button click 
        document 
            .getElementById("file-input-button") 
            .addEventListener("click", function (event) { 
                event.preventDefault(); 
            }); 

// Finding the document closest to the delete button and removing it from the list
documentImages.addEventListener("click", (e) => {
  const target = e.target;
  const deleteFileButton = target.closest(".delete-document");
  const documentsWrapper = target.closest("#document-images");
  const documentToDelete = target.closest(".document-file");
  const documentName = documentToDelete.firstElementChild.children[1].innerText;

  if (deleteFileButton === null) return;

  /* This is finding the index of the file name in the documentFileObj object. */
  const index = documentFileObj["fileName"].find((x) => x === documentName);
  /* This is removing the file name from the documentFileObj object. */
  documentFileObj["fileName"].splice(index, 1);
  documentsWrapper.removeChild(documentToDelete);
});

/**
 * If the file type is jpg, jpeg, or png, return the text-violet-600 fa-image class. Otherwise, return
 * the text-red-600 fa-file-pdf class.
 * @param fileType - The file type of the file.
 * @returns A function that takes a fileType as an argument and returns a string.
 */
const fileTypeLogo = (fileType) => {
  if (fileType === "jpg" || fileType === "jpeg" || fileType === "png") {
    return "text-violet-600 fa-image";
  } else {
    return "text-red-600 fa-file-pdf";
  }
};

// //If user Drag File Over DropArea
/* This is an event listener. It is listening for the dragover event. When the dragover event is
triggered, it will prevent the default behavior, add the active class to the dropArea element, and
change the text of the dragFile element. */
dropArea.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragFile.textContent = "Release to Upload File";
});

// //If user leave dragged File from DropArea
/* This is an event listener. It is listening for the dragleave event. When the dragleave event is
triggered, it will remove the active class from the dropArea element and change the text of the
dragFile
element. */
dropArea.addEventListener("dragleave", () => {
  dropArea.classList.remove("active");
  dragFile.textContent = "Drag files here to upload";
});

//If user drop File on DropArea
/* This is an event listener. It is listening for the drop event. When the drop event is triggered, it
will prevent the default behavior, remove the active class from the dropArea element, change the
text of the dragFile element, and call the setttingFileValue function. */
dropArea.addEventListener("drop", (e) => {
  e.preventDefault();
  const target = e.dataTransfer;
  dropArea.classList.remove("active");
  dragFile.textContent = "Drag files here to upload";
  setttingFileValue(target);
});

const setttingFileValue = (target) => {
  /*getting user select file and [0] this means if user select multiple files then we'll select only the first one
     This is getting the file name, file size, and file type. */
  const fileName = target.files[0].name;
  const fileSize = target.files[0].size;
  const fileType = target.files[0].type.split("/").pop(); //fetching only the part after slash

  let filesizeErrorMessage = document.getElementById("filesize-error");
  let filetypeErrorMessage = document.getElementById("filetype-error");

  /* This is checking the file size. If the file size is greater than 5mb, it will show an error
    message. */
  let sizeInMB = Number.parseFloat(fileSize / (1024 * 1024)).toFixed(2);
  if (sizeInMB > 5) {
    filesizeErrorMessage.classList.remove("hidden");
    filetypeErrorMessage.classList.add("hidden");
  } else {
    filesizeErrorMessage.classList.add("hidden");
    /* This is checking the file type. If the file type is not pdf or image, it will show an error message. */
    const fileTypes = ["application/pdf","image/png","image/jpg","image/jpeg"]
    if (
      fileTypes.includes(target.files[0].type)
    ) {
      filetypeErrorMessage.classList.add("hidden");

      /* This is creating a new element and setting the file name, file size, and file type. */
      let newDocument = document.createElement("li");

      /* Setting the class attribute of the newDocument element. */
      newDocument.setAttribute(
        "class",
        "document-file",
        "style",
        "width: 100%; display: flex; padding-top: 0.75rem; padding-bottom: 0.75rem; gap: 0.25rem; justify-content: space-between; align-items: center; border-bottom-width: 2px; font-size: 0.75rem; line-height: 1rem; @media (min-width: 768px) { align-items: flex-end; font-size: 0.875rem; line-height: 1.25rem; }"
      );

      /* Setting the html markup of the new element and setting the file name, file size, and file type. */
      newDocument.innerHTML = `
            <p style="overflow: hidden; width: 100%; text-overflow: ellipsis; white-space: nowrap; "><i style="margin-right: 1.25rem; font-size: 1.25rem; line-height: 1.75rem; color: black;" class="fa-solid ${fileTypeLogo(
              fileType
            )}"></i> 
            <span>${fileName}<span></p>
            <p>${fileType}</p>
            <p>${sizeInMB}mb</p>
            <p>Uploaded</p>
            <button class="delete-document"><i class="fa-solid fa-trash" style="color :black;"></i></button>
            `;
      /* Adding the newDocument element to the documentImages element. */
      documentImages.append(newDocument);
      /* This is adding the file name to the documentFileObj object. */
      documentFileObj["fileName"].push(fileName);
    } else {
      filetypeErrorMessage.classList.remove("hidden");
    }
  }
};
});
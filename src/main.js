


//

const elements = {
    "snippets": {
        "textField": {
            "eventListeners": {
                newSnippet: function() {
                    //console.log("clicked");
    
                    // Getting the container element for snippets
                    const snippetsContainer = document.querySelector(".snippetsContainer");
                    // Getting an id for the input 'name' attribute
                    let codeNumber = snippetsContainer.children.length + 1;
                    //
                    const snippetType = document.querySelector(".snippetType");
                    console.log(snippetType.value);
    
                    // Creating HTML elements
                    elements.snippets.textField.createElements(snippetsContainer, codeNumber, snippetType.value);
                }
            },
            create: function() {

                // Setting eventlistener to new snippet button
                const newSnippetBtn = document.querySelector(".newSnippetBtn");
                newSnippetBtn.addEventListener("click", elements.snippets.textField.eventListeners.newSnippet);
    
            },
            createElements: function(container, id, type) {

                // Variables based on snippet type
                let snippetColor = (type === "text") ? "secondary" : "tertiary";
                let snippetLabelText = (type === "text") ? "Tekst" : "Nimekiri";

                // Creating a snippet segment element
                const snippet = document.createElement("div");
                snippet.classList.add("ui", "segment", snippetColor, "snippet");
                container.appendChild(snippet);

                // Creating a fields container for the snippet
                const fieldsContainer = document.createElement("div");
                fieldsContainer.classList.add("fields");
                snippet.appendChild(fieldsContainer);

                // Creating a field
                const field = document.createElement("div");
                field.classList.add("twelve", "wide", "field");
                fieldsContainer.appendChild(field);

                // Creating a label for the field
                const label = document.createElement("label");
                label.innerText = snippetLabelText;
                field.appendChild(label);

                // Creating an input for the field
                const input = document.createElement("textarea");
                input.setAttribute("name", `snip_${type}_${id}`);
                input.setAttribute("placeholder", `Sisesta ${snippetLabelText.toLowerCase()}`);
                input.setAttribute("rows", "3");
                field.appendChild(input);
            }

        }
    },
    init: function() {
        elements.snippets.textField.create();
    }
};


elements.init();
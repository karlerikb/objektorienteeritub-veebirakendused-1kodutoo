


//

const elements = {
    "snippets": {
        "textField": {
            "eventListeners": {
                newSnippet: function() {
                    console.log("clicked");
    
                    // Getting the container element for snippets
                    const snippetsContainer = document.querySelector(".snippetsContainer");
                    // Getting an id for the input 'name' attribute
                    let codeNumber = snippetsContainer.children.length + 1;
    
                    elements.snippets.textField.createElements(snippetsContainer, codeNumber);
    /* 
                    <div class="ui segment snippet secondary">
                        <div class="fields">
                            <div class="twelve wide field">
                                <label>Tekst</label>
                                <textarea name="snippetText1" placeholder="Tekst" rows="3"></textarea>
                            </div>
                        </div>
                    </div> */
                }
    
            },
            create: function() {

                // Setting eventlistener to new snippet button
                const newSnippetBtn = document.querySelector(".newSnippetBtn");
                newSnippetBtn.addEventListener("click", elements.snippets.textField.eventListeners.newSnippet);
    
            },
            
            createElements: function(container, id) {

                // Creating a segment element for the snippet
                const snippet = document.createElement("div");
                snippet.classList.add("ui", "segment", "secondary", "snippet");
                container.appendChild(snippet);

                // 

            }

        }
    },
    init: function() {
        elements.snippets.textField.create();
    }
};


elements.init();
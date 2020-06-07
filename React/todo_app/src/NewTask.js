import React, { useState } from 'react'
import uniqueId from './simple-uniqueid'

function NewTask({ appendTask }) {
    const [task, updateTask] = useState({ id: "", text: "", status: false })
    const [id] = useState(uniqueId('myprefix-'))

    function handleTyping(event) {
        updateTask({ ...task, text: event.target.value })
    }

    function handleSubmit(event) {
        appendTask({ ...task, id: id })
        updateTask({ ...task, text: "" })
    }

    return (
        <div>
            <form onSubmit={handleSubmit}>
                <input type="text" value={task.text} onChange={handleTyping} />
                <input type="submit" value="Add" />
            </form>
        </div>
    );
}

export default NewTask;
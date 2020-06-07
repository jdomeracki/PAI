import React, { useState } from 'react';

function Task({ task, changeStatus, filter }) {

    function handleClick() {
        changeStatus(task.id)
    }

    return (
        <div style={{ display: (!filter || !task.status) ? 'block' : 'none' }}>
            <input type="checkbox" onClick={handleClick}></input>
            <label style={{
                textDecoration: task.status ? "line-through" : ""
            }}>
                {task.text}
            </label>
        </div>
    )
}

export default Task;
import React, { useState } from 'react';
import Task from './Task';

function ToDoList({ tasks, changeStatus, filter }) {

    if (!tasks.length) {
        return <p>Nothing to do..</p>
    } else {
        return (
            <div>
                <ul>
                    {tasks.map(task => (
                        <Task key={task.id} task={task} changeStatus={changeStatus} filter={filter} />
                    ))}
                </ul>
            </div>)
    }
}

export default ToDoList;
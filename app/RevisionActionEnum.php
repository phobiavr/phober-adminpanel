<?php

namespace App;

enum RevisionActionEnum: string {
    case CREATE = 'CREATE';
    case RESTORE = 'RESTORE';
    case UPDATE = 'UPDATE';
    case DELETE = 'DELETE';
}

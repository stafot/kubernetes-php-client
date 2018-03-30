<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


use Kubernetes\Model\Tag\Version;

class RoleBinding extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1BETA1;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'RoleBinding';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var RoleRef
     * RoleRef can reference a Role in the current namespace or a ClusterRole in the global namespace. If the RoleRef
     * cannot be resolved, the Authorizer must return an error.
     */
    public $roleRef;

    /**
     * @var Subject[]
     */
    public $subjects;


    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ObjectMeta::class, false);

        return $this;
    }

    /**
     * @param RoleRef $roleRef
     *
     * @return self
     */
    public function setRoleRef($roleRef)
    {
        $this->roleRef = $this->_createPropertyValue($roleRef, RoleRef::class, false);

        return $this;
    }

    /**
     * @param Subject[] $subjects
     *
     * @return self
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $this->_createPropertyValue($subjects, Subject::class, true);

        return $this;
    }

}
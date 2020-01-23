<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Glusterfs mount that lasts the lifetime of a pod. Glusterfs volumes
 * do not support ownership management or SELinux relabeling.
 */
class GlusterfsVolumeSource extends \KubernetesRuntime\AbstractModel
{

    /**
     * EndpointsName is the endpoint name that details Glusterfs topology. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @var string
     */
    public $endpoints = null;

    /**
     * Path is the Glusterfs volume path. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @var string
     */
    public $path = null;

    /**
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only
     * permissions. Defaults to false. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md#create-a-pod
     *
     * @var boolean
     */
    public $readOnly = null;


}

